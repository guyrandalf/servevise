/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#000000',
        'secondary': '#F95B3D',        
        'btn-primary': '#F95B3D',
        'btn-secondary': '#1A1A1A',
      },
    },
  },
  plugins: [],
}