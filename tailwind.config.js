import prelinePlugin from 'preline/plugin';

export default {
    content: [
        './resources/**/*.{js,vue,ts}',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            colors: {
                // Brand colors
                primary: '#205E87',
                success: '#1FC16B',
                warning: '#FFDB43',
                danger: '#FB3748',
                accent: '#FA8013',

                // Neutral colors (grayscale)
                'neutral-primary-soft': 'rgba(32, 94, 135, 0.08)',
                'neutral-primary-medium': 'rgba(32, 94, 135, 0.16)',
                'neutral-primary-strong': 'rgba(32, 94, 135, 0.24)',
                
                'neutral-secondary-light': '#F5F5F5',
                'neutral-secondary-medium': '#F0F0F0',
                'neutral-secondary-strong': '#E8E8E8',
                
                'neutral-accent-light': '#FFFAED',
                'neutral-accent-medium': '#FFF5D6',
                'neutral-accent-strong': '#FFE8A6',

                // Border colors
                'border-default': '#E5E5E5',
                'border-default-medium': '#D9D9D9',
                'border-default-strong': '#CCCCCC',

                // Text colors
                'text-heading': '#1A1A1A',
                'text-body': '#4D4D4D',
                'text-subtle': '#808080',
            },
            borderRadius: {
                'base': '0.375rem',     // 6px - default rounded radius
                'sm': '0.25rem',        // 4px
                'md': '0.5rem',         // 8px
                'lg': '0.75rem',        // 12px
                'xl': '1rem',           // 16px
                '2xl': '1.5rem',        // 24px
                'full': '9999px',       // full border radius
            },
            boxShadow: {
                'xs': '0 1px 2px rgba(0, 0, 0, 0.05)',
                'sm': '0 1px 3px rgba(0, 0, 0, 0.1)',
                'md': '0 4px 6px rgba(0, 0, 0, 0.1)',
                'lg': '0 10px 15px rgba(0, 0, 0, 0.1)',
                '2xs': '0 0.5px 1px rgba(0, 0, 0, 0.05)',
            },
            spacing: {
                'base': '0.375rem',
            },
        },
    },
    plugins: [prelinePlugin],
    darkMode: 'class',
};

