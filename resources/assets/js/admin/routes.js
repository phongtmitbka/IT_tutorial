import Home from './components/contents/Home';
import NotFound from './components/NotFound';
export default {
  mode: 'history',
  routes: [
    {
      name: 'admin',
      path: '/admin',
      component: Home,
    },
    {path: '*', component: NotFound}
  ]
};
