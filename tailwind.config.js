
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
        DEFAULT: '#222831',
      },
      gray: {
        DEFAULT: '#393e46',
      },
      orange: {
        DEFAULT: '#d65a31'
      },
      white: {
        DEFAULT: '#eeeeee',
        light: '#b0b0b0',
      },
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
