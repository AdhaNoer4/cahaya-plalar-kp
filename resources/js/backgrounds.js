import * as THREE from "three";

const CANVAS_ID = "three-bg";
const COLORS = {
  primary: new THREE.Color(0x06b6d4),
  primaryDark: new THREE.Color(0x0891b2),
  accent: new THREE.Color(0x10b981),
  white: new THREE.Color(0xffffff),
};

let scene, camera, renderer, particles, mouse, clock;
let activeContainer = null;

function init(container) {
  if (activeContainer === container) return;
  cleanup();

  activeContainer = container;
  const rect = container.getBoundingClientRect();

  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(75, rect.width / rect.height, 0.1, 1000);
  camera.position.z = 30;

  renderer = new THREE.WebGLRenderer({
    alpha: true,
    antialias: true,
  });
  renderer.setSize(rect.width, rect.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.domElement.id = CANVAS_ID;
  renderer.domElement.style.position = "absolute";
  renderer.domElement.style.top = "0";
  renderer.domElement.style.left = "0";
  renderer.domElement.style.width = "100%";
  renderer.domElement.style.height = "100%";
  renderer.domElement.style.pointerEvents = "none";
  container.appendChild(renderer.domElement);

  clock = new THREE.Clock();
  mouse = new THREE.Vector2(9999, 9999);

  createParticles();
  animate();

  container.addEventListener("mousemove", onMouseMove);
  window.addEventListener("resize", onResize);
}

function createParticles() {
  const count = 120;
  const positions = new Float32Array(count * 3);
  const velocities = [];
  const sizes = new Float32Array(count);

  for (let i = 0; i < count; i++) {
    positions[i * 3] = (Math.random() - 0.5) * 60;
    positions[i * 3 + 1] = (Math.random() - 0.5) * 40;
    positions[i * 3 + 2] = (Math.random() - 0.5) * 40;
    velocities.push({
      x: (Math.random() - 0.5) * 0.02,
      y: (Math.random() - 0.5) * 0.02,
      z: (Math.random() - 0.5) * 0.01,
    });
    sizes[i] = Math.random() * 3 + 1;
  }

  const geometry = new THREE.BufferGeometry();
  geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));
  geometry.setAttribute("size", new THREE.BufferAttribute(sizes, 1));

  const textureCanvas = document.createElement("canvas");
  textureCanvas.width = 32;
  textureCanvas.height = 32;
  const ctx = textureCanvas.getContext("2d");
  const gradient = ctx.createRadialGradient(16, 16, 0, 16, 16, 16);
  gradient.addColorStop(0, "rgba(255,255,255,1)");
  gradient.addColorStop(0.3, "rgba(255,255,255,0.6)");
  gradient.addColorStop(1, "rgba(255,255,255,0)");
  ctx.fillStyle = gradient;
  ctx.fillRect(0, 0, 32, 32);
  const texture = new THREE.CanvasTexture(textureCanvas);

  const material = new THREE.PointsMaterial({
    size: 0.35,
    map: texture,
    blending: THREE.AdditiveBlending,
    depthWrite: false,
    transparent: true,
    opacity: 0.6,
    color: COLORS.primary,
  });

  particles = new THREE.Points(geometry, material);
  scene.add(particles);

  const lineGeo = new THREE.BufferGeometry();
  const linePositions = [];
  const lineColors = [];

  for (let i = 0; i < count; i++) {
    for (let j = i + 1; j < count; j++) {
      const dx = positions[i * 3] - positions[j * 3];
      const dy = positions[i * 3 + 1] - positions[j * 3 + 1];
      const dz = positions[i * 3 + 2] - positions[j * 3 + 2];
      const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

      if (dist < 12) {
        const alpha = 1 - dist / 12;
        linePositions.push(
          positions[i * 3],
          positions[i * 3 + 1],
          positions[i * 3 + 2],
          positions[j * 3],
          positions[j * 3 + 1],
          positions[j * 3 + 2]
        );
        lineColors.push(
          COLORS.primary.r * alpha,
          COLORS.primary.g * alpha,
          COLORS.primary.b * alpha,
          COLORS.primary.r * alpha * 0.5,
          COLORS.primary.g * alpha * 0.5,
          COLORS.primary.b * alpha * 0.5
        );
      }
    }
  }

  lineGeo.setAttribute(
    "position",
    new THREE.Float32BufferAttribute(linePositions, 3)
  );
  lineGeo.setAttribute(
    "color",
    new THREE.Float32BufferAttribute(lineColors, 3)
  );

  const lineMat = new THREE.LineBasicMaterial({
    vertexColors: true,
    transparent: true,
    opacity: 0.25,
    blending: THREE.AdditiveBlending,
    depthWrite: false,
  });
  const lines = new THREE.LineSegments(lineGeo, lineMat);
  scene.add(lines);

  particles.userData = { velocities, lines };
}

function animate() {
  if (!particles || !renderer) return;
  requestAnimationFrame(animate);

  const time = clock.getElapsedTime();
  const positions = particles.geometry.attributes.position.array;
  const count = positions.length / 3;
  const { velocities } = particles.userData;

  for (let i = 0; i < count; i++) {
    const i3 = i * 3;
    positions[i3] += velocities[i].x;
    positions[i3 + 1] += velocities[i].y;
    positions[i3 + 2] += velocities[i].z;

    const boundX = 30;
    const boundY = 20;
    const boundZ = 20;

    if (positions[i3] > boundX) positions[i3] = -boundX;
    if (positions[i3] < -boundX) positions[i3] = boundX;
    if (positions[i3 + 1] > boundY) positions[i3 + 1] = -boundY;
    if (positions[i3 + 1] < -boundY) positions[i3 + 1] = boundY;
    if (positions[i3 + 2] > boundZ) positions[i3 + 2] = -boundZ;
    if (positions[i3 + 2] < -boundZ) positions[i3 + 2] = boundZ;
  }

  if (particles.userData.lines) {
    const linePos = particles.userData.lines.geometry.attributes.position.array;
    const lineColor =
      particles.userData.lines.geometry.attributes.color.array;
    let idx = 0;

    for (let i = 0; i < count; i++) {
      for (let j = i + 1; j < count; j++) {
        const dx = positions[i * 3] - positions[j * 3];
        const dy = positions[i * 3 + 1] - positions[j * 3 + 1];
        const dz = positions[i * 3 + 2] - positions[j * 3 + 2];
        const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

        if (dist < 12) {
          if (idx + 5 >= linePos.length) break;
          const alpha = 1 - dist / 12;
          linePos[idx] = positions[i * 3];
          linePos[idx + 1] = positions[i * 3 + 1];
          linePos[idx + 2] = positions[i * 3 + 2];
          linePos[idx + 3] = positions[j * 3];
          linePos[idx + 4] = positions[j * 3 + 1];
          linePos[idx + 5] = positions[j * 3 + 2];
          lineColor[idx] = COLORS.primary.r * alpha;
          lineColor[idx + 1] = COLORS.primary.g * alpha;
          lineColor[idx + 2] = COLORS.primary.b * alpha;
          lineColor[idx + 3] = COLORS.primary.r * alpha * 0.5;
          lineColor[idx + 4] = COLORS.primary.g * alpha * 0.5;
          lineColor[idx + 5] = COLORS.primary.b * alpha * 0.5;
          idx += 6;
        }
      }
    }
    particles.userData.lines.geometry.attributes.position.needsUpdate = true;
    particles.userData.lines.geometry.attributes.color.needsUpdate = true;
  }

  particles.geometry.attributes.position.needsUpdate = true;

  const pulse = Math.sin(time * 0.3) * 0.15 + 0.5;
  particles.material.opacity = pulse * 0.5 + 0.2;
  particles.rotation.y = time * 0.02;
}

function onMouseMove(event) {
  const rect = activeContainer?.getBoundingClientRect();
  if (!rect) return;
  mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
  mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
}

function onResize() {
  if (!activeContainer || !renderer || !camera) return;
  const rect = activeContainer.getBoundingClientRect();
  camera.aspect = rect.width / rect.height;
  camera.updateProjectionMatrix();
  renderer.setSize(rect.width, rect.height);
}

function cleanup() {
  if (renderer) {
    renderer.dispose();
    renderer.domElement?.remove();
  }
  scene = null;
  camera = null;
  renderer = null;
  particles = null;
  clock = null;
}

// ── Init ──

document.addEventListener("DOMContentLoaded", () => {
  const hero = document.getElementById("three-bg-container");
  if (hero) init(hero);
});

const observer = new MutationObserver(() => {
  if (!activeContainer) {
    const hero = document.getElementById("three-bg-container");
    if (hero) init(hero);
  }
});
observer.observe(document.body, { childList: true, subtree: true });
