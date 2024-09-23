/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html"],
  theme: {
    
    extend: {
      fontFamily:{
        utama: ['Montserrat', 'sans-serif']
      },

      colors:{
        aqua: {
          100: "#e7fcfd",
          200: "#cefafa",
          300: "#b6f7f8",
          400: "#9df5f5",
          500: "#85f2f3",
          600: "#6ac2c2",
          700: "#509192",
          800: "#356161",
          900: "#1b3031"
},
        Primary: {
          100: "#feefcd",
          200: "#fddf9b",
          300: "#fbd069",
          400: "#fac037",
          500: "#f9b005",
          600: "#c78d04",
          700: "#956a03",
          800: "#644602",
          900: "#322301"
},
        white: {
          100: "#ffffff",
          200: "#ffffff",
          300: "#ffffff",
          400: "#ffffff",
          500: "#ffffff",
          600: "#cccccc",
          700: "#999999",
          800: "#666666",
          900: "#333333"
},
        Dark: {
          100: "#cfd5dc",
          200: "#9faab8",
          300: "#708095",
          400: "#405571",
          500: "#102b4e",
          600: "#0d223e",
          700: "#0a1a2f",
          800: "#06111f",
          900: "#030910"
},
      }

    },
  },
  plugins: [],
}

