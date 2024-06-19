/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'light-lavender' : '#7F7FD5',
            'light-blue' : '#86A8E7',
            'light-green' : '#91EAE4',
        },
    },
  },
  plugins: [],
}

