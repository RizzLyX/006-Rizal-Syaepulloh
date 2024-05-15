/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        nova: ["Nova Round", "system-ui"],
        roboto: ["Roboto", "sans-serif"],
      },
    },
  },
  plugins: [],
}

