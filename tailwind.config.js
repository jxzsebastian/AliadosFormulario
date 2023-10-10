/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    darkMode: 'class',

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            rose: colors.rose,
          },
    },
  },
  plugins: [],
}

