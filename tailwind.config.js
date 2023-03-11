/** @type {import('tailwindcss').Config} */
module.exports = {

  darkMode: 'class',

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },

  },
  plugins: [
    require('flowbite/plugin')
  ],
}
