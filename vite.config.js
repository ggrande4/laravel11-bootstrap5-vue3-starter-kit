import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import {fileURLToPath, URL} from "url";

export default defineConfig({
    plugins: [
        laravel(['resources/js/app_vue.js', 'resources/js/app_blade.js']),
        vue({
            template: {
                transformAssetUrls: {
                  // The Vue plugin rewrites asset URLs in .vue files to point to the Laravel server.
                  // Setting this to `null` lets the Laravel plugin handle URLs to point to the Vite server.
                  base: null,

                  // The Vue plugin treats absolute URLs as file paths on disk.
                  // Setting this to `false` leaves them unchanged, so they can reference public assets as expected.
                  includeAbsolute: false,
                },
            },
        }),
    ],
    css: {
      preprocessorOptions: {
        scss: {
          //this is needed if you want to use bootstrap and custom variables in the vue components
          additionalData: `
            @import "bootstrap/scss/functions";
            @import "@/assets/scss/custom/_variables.scss";
            @import "bootstrap/scss/variables";
          `,
        },
      },
    },
    build: {
      rollupOptions: {
        input: {
          main: fileURLToPath(new URL('./resources/js/assets/scss/main.scss', import.meta.url)),
          app_blade: fileURLToPath(new URL('./resources/js/app_blade.js', import.meta.url)),
          app_vue: fileURLToPath(new URL('./resources/js/app_vue.js', import.meta.url)),
        },
        output: {
          entryFileNames: '[name].js',
          chunkFileNames: 'chunks/[name]-[hash].js',
          assetFileNames: 'assets/[name]-[hash][extname]',
        },
      },
    },
});
