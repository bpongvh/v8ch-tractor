module.exports = {
  files: [
    'app/**/*.php',
    'config/**/*.php',
    'dist/**/*',
    'resources/**/*.php',
    'resources/views/**/*.php',
    'resources/style.css',
  ],
  proxy: 'wp-dev.v8ch.local',
  ui: false,
  watch: true,
};