import {createApp} from 'vue'
import App from './App.vue'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import httpClient from "./axiosHttp"
window.axiosInstance = httpClient
createApp(App).use(ElementPlus).mount("#app")