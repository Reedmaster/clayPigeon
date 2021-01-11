
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      black: {
        DEFAULT: '#363636',
        light: '#dcdcdc',
      },
      blue: {
        DEFAULT: '#35649c',
        light: '#4579b2'
      },
      white: {
        DEFAULT: '#fbfbfb',
        light: '#fbfbfb',
      },
      orange: {
        DEFAULT: '#ff9b93',
      },
    },
    extend: {
      backgroundImage: theme => ({
        'background': "url('/images/background.jpg')",
      })
    },
    fontFamily: {
      'display': ['Roboto', 'sans-serif'],
      'body': ['Open Sans', 'sans-serif'],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
