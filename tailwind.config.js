import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                nunito: ["Nunito", "sans-serif"],
                segoe: ["SegoeUI", "sans-serif"],
                segoeBold: ["SegoeUIBold", "sans-serif"],
            },
            backgroundImage: {
                "hero-dashboard":
                    "url('/public/images/heroimagedashboard.jpg')",
                "footer-texture": "url('/img/footer-texture.png')",
                "fast-food": "url('/public/images/fastfood.png')",
                "see-more": "url('/public/images/seemore.png')",
                "tik-tok": "url('/public/images/ic_baseline-tiktok.png')",
                "e-mail": "url('/public/images/ic_baseline-email.png')",
                "insta-gram": "url('/public/images/lets-icons_insta.png')",
                "linked-in": "url('/public/images/mdi_linkedin.png')",
                "gradient-radial-left":
                    "radial-gradient(circle at left,var(--tw-gradient-stops))",
            },
        },
    },
    plugins: [],
};
