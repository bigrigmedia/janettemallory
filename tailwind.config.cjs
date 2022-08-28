const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      padding: {
        edge: '240px'
      },
      fontFamily: {
        laluxesscript: ["laluxesscript", "sans-serif"],
        acherusgrotesqueregular: ["acherus-grotesque-regular", "sans-serif"],
      },
      colors: {
        accent: '#eceae9'
      },
      inset: {
        auto: 'auto',
        edge: '240px'
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
