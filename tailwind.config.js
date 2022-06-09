module.exports = {
  content: [
    "./resources/views/login.blade.php",
    "./resources/views/register.blade.php",
    "./resources/views/welcome.blade.php",
    "./resources/views/dashboard.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'mee6': '#5865f2',
        'mee6d': '#4751c1',
        'mee9-red': '#ff3e3e',
        'mee9-red-dark': '#cf3030',
        'dark-nav': '#262b3c',
        'darkl-bg': '#30384f',
        'darkli-bg': '#131620',
        'darklig-bg': '#1d222f',
        'darkligh-bg': '#272d3f',
        'dark-bg': '#222737',
      },
    },
 
  },
  plugins: [
    require('@tailwindcss/forms'),
    // ...
  ],
}