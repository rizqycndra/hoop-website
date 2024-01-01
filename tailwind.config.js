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
        "b1": "#1D1D1F",
        "b2": "#444444",
        "b3": "#1F2937",
        "w1": "#FFFFFF",
        "w2": "#F5F5F7",
        "g1": "#87878C",
        "g2": "#B3B3B3",
      },
    },
  },
  plugins: [],
}

