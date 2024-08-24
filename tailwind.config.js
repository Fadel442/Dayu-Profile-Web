/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'logo-bg': "url('./public/gambar/background logo.png')",
    },
      colors: {
        'cl-pale pink' : '#FFCDEA',
        'cl-pink' : '#FB9AD1',
    },
    },
  },
  plugins: [],
}

