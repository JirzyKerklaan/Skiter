/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
    variants: {
      extend: {
        visibility: ["group-hover"],
      },
    },
  plugins: [
      require("daisyui")
  ],
}
