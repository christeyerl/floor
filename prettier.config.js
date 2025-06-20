/** @type {import('prettier').Config} */
export default {
  plugins: ['prettier-plugin-antlers', 'prettier-plugin-tailwindcss'],
  printWidth: 120,
  singleAttributePerLine: true,
  singleQuote: true,
  tailwindStylesheet: './resources/css/site.css',
  overrides: [
    {
      files: ['*.antlers.html'],
      options: {
        parser: 'antlers',
      },
    },
  ],
};
