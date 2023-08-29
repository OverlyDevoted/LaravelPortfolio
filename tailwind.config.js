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
        'primary-dark':'#1b211d',
        'primary-light':'#47A89F',
        'secondary-light':'#1D5C56',
      },
      maxHeight: {
        '1/4': '25%',
      }
    },
  },
  plugins: [],
}

