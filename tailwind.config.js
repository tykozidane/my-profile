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
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'purple': '#3f3cbb',
        'midnight': '#121063',
        'metal': '#565584',
        'tahiti': '#3ab7bf',
        'silver': '#ecebff',
        'bubble-gum': '#ff77e9',
        'bermuda': '#78dcca',
        'mycolor': '#029e9e'
      },
      fontFamily: {
        bebasNeue: ["Bebas Neue", "ui-monospace", "SFMono-Regular"],
        lilitaone: ["Lilita One"]
      },
    },
    
  },
  plugins: [],
}