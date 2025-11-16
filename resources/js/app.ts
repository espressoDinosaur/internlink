import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { initializeTheme } from './composables/useAppearance';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Initialize Preline on page load and navigation
const initPreline = async () => {
    try {
        const prelineModule = await import('preline/src/static');
        const HSStaticMethods = prelineModule.default;
        if (HSStaticMethods?.autoInit) {
            HSStaticMethods.autoInit();
        }
    } catch (error) {
        console.debug('Preline components with data-hs-* attributes will work');
    }
};

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: (name) =>
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);

        // Initialize Preline after Vue mount
        setTimeout(() => {
            initPreline().catch(e => console.debug('Preline init:', e));
        }, 100);
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();

// Re-initialize Preline on Inertia page navigation
document.addEventListener('inertia:navigate', () => {
    setTimeout(() => {
        initPreline().catch(e => console.debug('Preline reinit:', e));
    }, 100);
});
