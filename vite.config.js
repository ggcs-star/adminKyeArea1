import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.jsx',
            refresh: true,
        }),
        react(),
  
      
    ],
    server: {
    host: '0.0.0.0',          // Listen on all network interfaces
    port: 5173,               // Default Vite port
    strictPort: true,         // Fail if port is taken
    hmr: {
        host: '192.168.0.102', // Your laptop IP
        protocol: 'ws',       // WebSocket protocol for HMR
    },
    cors: true,                // <-- This enables CORS headers
}

});