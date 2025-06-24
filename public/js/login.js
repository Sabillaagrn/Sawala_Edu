// public/js/login.js (update)

document.addEventListener("DOMContentLoaded", function () {
    /* Animasi tampilan awal */
    const elementsToAnimate = document.querySelectorAll(".fade-in-up");

    elementsToAnimate.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add("show");
        }, index * 150);
    });

    /* Login Logic */
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector(".btn-submit");
            const originalText = submitBtn.textContent;

            // Disable button dan ubah text
            submitBtn.disabled = true;
            submitBtn.textContent = "Loading...";

            try {
                const response = await fetch(this.action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                    },
                });

                const data = await response.json();

                if (data.success) {
                    // Success - redirect
                    showMessage(data.message, "success");
                    setTimeout(() => {
                        window.location.href = data.redirect;
                    }, 1000);
                } else {
                    // Error
                    showMessage(data.message || "Login gagal", "error");
                }
            } catch (error) {
                console.error("Error:", error);
                showMessage("Terjadi kesalahan. Silakan coba lagi.", "error");
            } finally {
                // Re-enable button
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        });
    }

    // Function untuk menampilkan pesan
    function showMessage(message, type) {
        // Hapus pesan sebelumnya jika ada
        const existingMessage = document.querySelector(".alert-message");
        if (existingMessage) {
            existingMessage.remove();
        }

        // Buat elemen pesan
        const messageDiv = document.createElement("div");
        messageDiv.className = `alert-message ${type}`;
        messageDiv.textContent = message;

        // Style untuk pesan
        messageDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            z-index: 1000;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transform: translateX(400px);
            transition: transform 0.3s ease;
        `;

        if (type === "success") {
            messageDiv.style.backgroundColor = "#4da986";
            messageDiv.style.color = "white";
        } else {
            messageDiv.style.backgroundColor = "#e53e3e";
            messageDiv.style.color = "white";
        }

        document.body.appendChild(messageDiv);

        // Animasi masuk
        setTimeout(() => {
            messageDiv.style.transform = "translateX(0)";
        }, 100);

        // Hapus pesan setelah 4 detik
        setTimeout(() => {
            messageDiv.style.transform = "translateX(400px)";
            setTimeout(() => {
                if (messageDiv.parentNode) {
                    messageDiv.parentNode.removeChild(messageDiv);
                }
            }, 300);
        }, 4000);
    }
});
