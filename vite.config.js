import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/guru.css",
                "resources/js/app.js",
                "resources/js/guru.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
