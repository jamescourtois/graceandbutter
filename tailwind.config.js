module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      whitelist: [
        /language/,
        /hljs/,
        /mce/,
      ],
    },
  },
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Quicksand'
        ],
        serif: [
          'Gentium Basic'
        ],
        mono: [
          'monospace',
        ],
      },
      colors:{
        'red' : '#AB2023',
        'dark-red' : '#470000',
        'teal' : '#75CCCF',
        'dark-teal' : '#336a6c',
        'light-teal' : '#B5ECEE',
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
      spacing: {
        '7': '1.75rem',
        '9': '2.25rem'
      },
      maxWidth: {
        '25': '25%',
        '33': '33.333%',
        '40': '40%',
        '50': '50%',
        '250': '250px',
      },
      opacity: {
        '80': '0.8',
        '85': '0.85',
        '90': '0.9',
      },
      minHeight: {
        '500': '500px',
      },
      boxShadow: {
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      }
    },
    fontSize: {
      'xs': '.8rem',
      'sm': '.925rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus']
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ]
}
