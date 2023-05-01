require('./bootstrap');
import { createApp } from 'vue';
import{AppComponent} from './components/AppComponent.vue';
import Swal from 'sweetalert2';
createApp(AppComponent).mount("#app");
