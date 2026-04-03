document.addEventListener("DOMContentLoaded", function () {

    function getCookie(name) {
        const nameEQ = name + "=";
        const cookies = document.cookie.split(";");

        for (let c of cookies) {
            c = c.trim();
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length);
            }
        }
        return null;
    }

    function setCookie(name, value, days) {
        const expiry = new Date();
        expiry.setTime(expiry.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value}; expires=${expiry.toUTCString()}; path=/`;
    }

    const modal = document.getElementById("cookie-consent-modal");

    // Show modal only if no cookie exists
    if (getCookie("cookie_consent") === null && modal) {
        modal.style.display = "block";
    }

    const acceptBtn = document.querySelector(".accept-cookies");
    const declineBtn = document.querySelector(".decline-cookies");

    if (acceptBtn) {
        acceptBtn.addEventListener("click", () => {
            setCookie("cookie_consent", "accepted", 30);
            modal.style.display = "none";
        });
    }

    if (declineBtn) {
        declineBtn.addEventListener("click", () => {
            setCookie("cookie_consent", "declined", 30);
            modal.style.display = "none";
        });
    }
});