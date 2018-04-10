import Home from './components/contents/Home';
import Index from './components/contents/courses/Index';
import Lesson from './components/contents/courses/Lesson';
import About from '../common/components/lesson/About';
import NotFound from './components/NotFound';
export default {
  mode: 'history',
  routes: [
    {
      name: 'manager',
      path: '/manager',
      component: Home,
    },
    {
      name: 'course',
      path: '/manager/course',
      component: Index,
      redirect: { name: 'lesson', params: {course: 'php-basic', lesson: 0} },
      children: [
        {
          name: 'about-course',
          path: '/manager/course/:course/about',
          component: About,
        },
        {
          name: 'add-lesson',
          path: '/manager/course/:course/lesson',
          component: Lesson,
        },
        {
          name: 'lesson',
          path: '/manager/course/:course/lesson/:lesson',
          component: Lesson,
        }
      ]
    },
    {path: '*', component: NotFound}
  ]
};
