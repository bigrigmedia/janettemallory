const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      fontFamily: {
        laluxesscript: ["laluxesscript", "sans-serif"],
        acherusgrotesqueregular: ["acherus-grotesque-regular", "sans-serif"],
      },
      colors: {
        accent: '#eceae9'
      },
      inset: {
        auto: 'auto'
      }
    },
  },
  plugins: [
    plugin(function ({ addUtilities }) {
      addUtilities({
        '.preserve-3d': {
          transformStyle: 'preserve-3d',
        }
      })
    })
  ],
};
