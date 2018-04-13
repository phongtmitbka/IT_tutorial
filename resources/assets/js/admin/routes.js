import Home from './components/contents/Home';
import CourseList from './components/contents/courses/List';
import AddCourse from './components/contents/courses/Add';
import PosterList from './components/contents/posters/List';
import AddPoster from './components/contents/posters/Add';
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
      name: 'courses',
      path: '/admin/courses',
      component: CourseList,
    },
    {
      name: 'add-course',
      path: '/admin/course',
      component: AddCourse,
    },
    {
      name: 'posters',
      path: '/admin/posters',
      component: PosterList,
    },
    {
      name: 'add-poster',
      path: '/admin/add-poster',
      component: AddPoster,
    },
    {path: '*', component: NotFound}
  ]
};
