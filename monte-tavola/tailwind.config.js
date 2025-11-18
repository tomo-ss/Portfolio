/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  safelist: [
    "w-[1248px]",
    "shadow-[0_4px_4px_rgba(0,0,0,0.5)]",
    "space-x-9",
    "min-w-[600px]",
    "inline-block"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}