/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', 'sans-serif'], // Define 'Inter' as a font for 'sans-serif' style
      },
      colors: {
        'primary-text': "#5E6670",
        'secondary-text': "#18191C",
        'search-color': "#570AF1",
        'position': "#0A65CC",
        'featured': "#E05151",
        'nav':'#F1F2F4'



      },
    
    },
  },
  plugins: [],
}

