import Home from './components/contents/Home';
import ManageCourse from './components/contents/ManageCourse';
import ManageLesson from './components/contents/ManageLesson';
import ManagePoster from './components/contents/ManagePoster';
import NotFound from '../common/components/NotFound';
export default {
  mode: 'history',
  routes: [
    {
      name: 'admin',
      path: '/admin',
      component: Home,
    },
    {
      name: 'manage-course',
      path: '/admin/manage-course',
      component: ManageCourse,
    },
    {
      name: 'manage-lesson',
      path: '/admin/manage-lesson',
      component: ManageLesson,
    },
    {
      name: 'manage-poster',
      path: '/admin/manage-poster',
      component: ManagePoster,
    },
    {path: '*', component: NotFound}
  ]
};
