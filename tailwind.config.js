import theme from 'tailwindcss/defaultTheme'
import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {
      colors: {
        darkPeach: '#EB602E',
        peach: '#F6B9A3',
      },
      backgroundImage: {
        'hero-pattern': "url('/images/patron.webp')",
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [forms, typography],
  content: [
    'site/templates/**/*.html',
    'site/templates/**/*.php',
    'resources/**/*.js',
    'resources/**/*.vue',
  ],
}
