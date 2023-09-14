import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { svelte } from '@sveltejs/vite-plugin-svelte';
import typescript from '@rollup/plugin-typescript';
import { sveltePreprocess } from 'svelte-preprocess/dist/autoProcess';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        svelte({
            preprocess: sveltePreprocess()
        }),
        typescript({
            tsconfig: './tsconfig.json'
        })
    ],
    server: {
        hmr: {
            host: 'localhost'
        }
    },
});
