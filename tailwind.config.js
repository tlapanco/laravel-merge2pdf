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
    		'violetsvg': 'rgb(237 233 254)',
    	},
    },
  },
  plugins: [],
}