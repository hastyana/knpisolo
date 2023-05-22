/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false,
  theme: {
    extend: {
      backgroundColor: ['active'],
      rotate: {
        '45': '45deg'
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1440px',
        '3xl': '1536px',
        '4xl': '1920px'
      },
      spacing: {
        '1px': '1px',
        '2px': '2px',
        '3px': '3px',
        '4px': '4px',
        '5px': '5px',
        '6px': '6px',
        '7px': '7px',
        '8px': '8px',
        '9px': '9px',
        '10px': '10px',
        '16px': '16px',
        '20px': '20px',
        '24px': '24px',
        '32px': '32px',
        '40px': '40px',
        '48px': '48px',
        '56px': '56px',
        '64px': '64px',
        '72px': '72px',
        '80px': '80px',
        '88px': '88px',
        '96px': '96px',
        '100px': '100px'
      },
      height: {
        '214p': '214px',
        '360p': '360px',
        '480p': '480px',
        '720p': '720px',
        '512p': '512px'
      },
      width: {
        '214p': '214px',
        '720p': '720px',
        '480p': '480px',
        '1080p': '1080px',
        '360p': '360px'       
      },
      fontFamily: {
        signika: "'Signika', sans-serif",
        roboto: "'Roboto', sans-serif",
        robotoserif: "'Roboto Serif', serif"
      },
      fontSize: {
        '5xl': ['3.052rem', {
          lineHeight: 1,
        }],
        '10xl': ['10rem', {
          lineHeight: 1,
        }],
        '11xl': ['12rem', {
          lineHeight: 1,
        }]
      },
      colors: {
        'black-1E1E1E': '#1E1E1E',
        'blue-1081E8': '#1081E8',
        'blue-56A5ED': '#56A5ED',
        'blue-BDDFFF': '#BDDFFF',
        'gray-DBDBDB': '#DBDBDB',
        'white-fafafa': '#FAFAFA'
      }
    },
  },
  plugins: [
    
  ],
}
