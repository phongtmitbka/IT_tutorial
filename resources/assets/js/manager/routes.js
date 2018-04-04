import Home from './components/contents/Home';
import NotFound from './components/NotFound';
export default {
  mode: 'history',
  routes: [
    {
      name: 'manager',
      path: '/manager',
      component: Home,
    },
    {path: '*', component: NotFound}
  ]
};
