/* ============================
      MOBILE MENU
============================ */
function toggleMenu() {
  document.getElementById("navLinks").classList.toggle("active");
}

/* ============================
      MODAL ELEMENTS
============================ */
const loginModal = document.getElementById("loginModal");
const registerModal = document.getElementById("registerModal");
const adminLoginModal = document.getElementById("adminLoginModal");

const loginBtns = document.querySelectorAll("#loginBtn, .loginBtn");
const registerBtns = document.querySelectorAll("#registerBtn, .registerBtn");
const feedbackLoginBtn = document.getElementById("feedbackLoginBtn");

const closeLogin = document.getElementById("closeLogin");
const closeRegister = document.getElementById("closeRegister");
const closeAdminLogin = document.getElementById("closeAdminLogin");

const openAdminLogin = document.getElementById("openAdminLogin");
const openResidentLogin = document.getElementById("openResidentLogin");
const openRegister = document.getElementById("openRegister");
const forgotPassword = document.getElementById("forgotPassword");

/* ============================
      MODAL HELPERS
============================ */
function openModal(modal) {
  if (!modal) return;
  modal.style.display = "flex";
  modal.classList.add("active");
  document.body.style.overflow = "hidden";
}

function closeModal(modal) {
  if (!modal) return;
  modal.style.display = "none";
  modal.classList.remove("active");
  document.body.style.overflow = "";
}

/* ============================
      OPEN MODALS
============================ */
loginBtns.forEach((btn) =>
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    openModal(loginModal);
  })
);

registerBtns.forEach((btn) =>
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    openModal(registerModal);
  })
);

if (feedbackLoginBtn) {
  feedbackLoginBtn.addEventListener("click", (e) => {
    e.preventDefault();
    openModal(loginModal);
  });
}

/* ============================
      CLOSE MODALS
============================ */
if (closeLogin) closeLogin.addEventListener("click", () => closeModal(loginModal));
if (closeRegister)
  closeRegister.addEventListener("click", () => closeModal(registerModal));
if (closeAdminLogin)
  closeAdminLogin.addEventListener("click", () => closeModal(adminLoginModal));

/* ============================
   SWITCH BETWEEN LOGIN TYPES
============================ */
if (openAdminLogin) {
  openAdminLogin.addEventListener("click", (e) => {
    e.preventDefault();
    closeModal(loginModal);
    openModal(adminLoginModal);
  });
}

if (openResidentLogin) {
  openResidentLogin.addEventListener("click", (e) => {
    e.preventDefault();
    closeModal(adminLoginModal);
    openModal(loginModal);
  });
}

if (openRegister) {
  openRegister.addEventListener("click", (e) => {
    e.preventDefault();
    closeModal(loginModal);
    openModal(registerModal);
  });
}

if (forgotPassword) {
  forgotPassword.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Forgot password functionality coming soon!");
  });
}

/* ============================
  CLOSE WHEN CLICKING OUTSIDE
============================ */
window.addEventListener("click", (e) => {
  if (e.target === loginModal) closeModal(loginModal);
  if (e.target === registerModal) closeModal(registerModal);
  if (e.target === adminLoginModal) closeModal(adminLoginModal);
});

/* ============================
        STEP PROGRESS
============================ */
function updateStepIndicator(activeTabId) {
  const steps = document.querySelectorAll(".step-item");
  steps.forEach((step) => {
    step.classList.remove("active");
    if (step.dataset.tab === activeTabId) step.classList.add("active");
  });
}

/* ============================
      NEXT + BACK BUTTONS
============================ */
document.addEventListener("DOMContentLoaded", () => {
  const nextBtns = document.querySelectorAll(".next-btn");
  const backBtns = document.querySelectorAll(".back-btn");
  const tabs = document.querySelectorAll(".tab-content");

  /* ---------- SHOW TAB ---------- */
  window.showTab = function (id) {
    tabs.forEach((tab) => tab.classList.remove("active"));
    document.getElementById(id).classList.add("active");

    updateStepIndicator(id);
  };

  /* ---------- NEXT ---------- */
  nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const nextTab = btn.getAttribute("data-next");
      showTab(nextTab);
    });
  });

  /* ---------- BACK ---------- */
  backBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const prevTab = btn.getAttribute("data-prev");
      showTab(prevTab);
    });
  });

  /* ---------- AUTO DISABLE NEXT WHEN EMPTY ---------- */
  tabs.forEach((tab) => {
    const nextBtn = tab.querySelector(".next-btn");
    if (!nextBtn) return;

    const inputs = tab.querySelectorAll("input, select");

    function checkInputs() {
      let allFilled = true;

      inputs.forEach((input) => {
        const name = input.getAttribute("name");

        if (name === "middle_name" || name === "suffix") return; // optional

        if (input.tagName === "SELECT" && !input.value.trim()) {
          allFilled = false;
        } else if (input.hasAttribute("required") && !input.value.trim()) {
          allFilled = false;
        }
      });

      nextBtn.disabled = !allFilled;
    }

    inputs.forEach((input) => {
      input.addEventListener("input", checkInputs);
      input.addEventListener("change", checkInputs);
    });

    checkInputs();
  });

  updateStepIndicator("basic"); // first step active
});

/* ============================
   BASIC TAB REQUIRED FIELDS
============================ */
const basicRequired = [
  "first_name",
  "last_name",
  "gender",
  "date_of_birth",
  "place_of_birth",
];

function checkBasicFields() {
  let filled = true;

  basicRequired.forEach((id) => {
    const input = document.querySelector(`[name="${id}"]`);
    if (!input || input.value.trim() === "") {
      filled = false;
    }
  });

  const nextBtn = document.querySelector('.next-btn[data-next="address"]');
  if (nextBtn) nextBtn.disabled = !filled;
}

basicRequired.forEach((id) => {
  const input = document.querySelector(`[name="${id}"]`);
  if (input) {
    input.addEventListener("input", checkBasicFields);
  }
});

checkBasicFields();

document.querySelectorAll(".tab-btn").forEach((button) => {
  button.addEventListener("click", function () {

    const tabId = this.getAttribute("data-tab");

    // Only affect MVM paragraphs
    document.querySelectorAll(".mvm-tab-content p").forEach((p) => {
      p.style.display = "none";
    });

    document.getElementById(tabId).style.display = "block";

    document.querySelectorAll(".tab-btn").forEach((btn) => {
      btn.classList.remove("active");
    });
    this.classList.add("active");
  });
});
 
document.addEventListener("DOMContentLoaded", () => {
  const pbContainer = document.getElementById("pbContainer");
  const kagawadRowA = document.getElementById("kagawadRowA");
  const kagawadRowB = document.getElementById("kagawadRowB");

  const officials = JSON.parse(localStorage.getItem("officials")) || {
    punongBarangay: [],
    kagawad: []
  };

  renderAll();

  function renderAll() {
    renderSection(pbContainer, officials.punongBarangay);
    renderSection(kagawadRowA, officials.kagawad.slice(0, 4));
    renderSection(kagawadRowB, officials.kagawad.slice(4, 8));
  }

  function renderSection(container, list) {
    container.innerHTML = "";

    if (!list.length) {
      const p = document.createElement("p");
      p.textContent = "No officials added yet.";
      p.style.color = "#888";
      container.appendChild(p);
      return;
    }

    list.forEach(off => {
      const card = document.createElement("div");
      card.classList.add("official-card");

      if (container.id === "pbContainer") {
        card.classList.add("punong-barangay-card");
      }

      card.innerHTML = `
        <img src="${off.photo || 'images/profile.jpg'}" alt="${off.name}">
        <h4>${off.name}</h4>
        <p>${off.position}</p>
      `;

      container.appendChild(card);
    });
  }
});

// LIGHTBOX FUNCTIONALITY
function openLightbox(img) {
  document.getElementById('lightbox-img').src = img.src;
  document.getElementById('lightbox').style.display = 'flex';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}
