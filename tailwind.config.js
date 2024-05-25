/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'white-bone': '#FCFCFC',
        'white-grey': '#FAFAFA',
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}