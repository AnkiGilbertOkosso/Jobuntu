/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#570AF1',
        primarytext: '#5E6670',
    secondarytext: "#18191C",
    searchcolor: "#570AF1",
    position: "#0A65CC",
    featured: "#E05151",
    nav:'#F1F2F4'

      },
      fontFamily: {
        sans: ['Quicksand', 'sans-serif'],
      },
    },
  },
  plugins: [
    // require('flowbite/plugin')
  ],
}
