/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./**/*.php'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#B21E1E',
        },
        danger: {
          DEFAULT: '#dc3545',
        },
        'ss-off-white': '#F5F5F5',
        'ss-grey': '#585858',
        'ss-dark': '#222',
      },
      screens: {
        '2xl': '1312px',
      },
      fontFamily: {
        lead: ['Oswald', ...defaultTheme.fontFamily.sans],
        base: ['Inter', ...defaultTheme.fontFamily.sans],
        icomoon: ['icomoon'],
      },
    },
  },
  plugins: [],
}
