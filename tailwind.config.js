/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'top-bg': "url('../../imgs/topbg.jpg')",
        'top': "url('../../imgs/bg.png')",
    }),

    colors: {
    
      'primary-one': '#30b4b5', //blue
      'primary-two': '#36b780', //green  

    },

    keyframes: {
      wave: {
          '0%': { transform: 'rotate(0.0deg)' },
          '15%': { transform: 'rotate(14.0deg)' },
          '30%': { transform: 'rotate(-8.0deg)' },
          '40%': { transform: 'rotate(14.0deg)' },
          '50%': { transform: 'rotate(-4.0deg)' },
          '60%': { transform: 'rotate(10.0deg)' },
          '70%': { transform: 'rotate(0.0deg)' },
          '100%': { transform: 'rotate(0.0deg)' },
      }
  },
  animation: {
    'wave': 'wave 2s linear infinite',
  }
  },
  },
  plugins: [],
}
