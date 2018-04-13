import Home from './components/contents/Home';
import Index from './components/contents/courses/Index';
import Lesson from './components/contents/courses/Lesson';
import About from '../common/components/lesson/About';
import NotFound from '../common/components/NotFound';
export default {
  mode: 'history',
  routes: [
    {
      name: 'poster',
      path: '/poster',
      component: Home,
    },
    {
      name: 'course',
      path: '/poster/course',
      component: Index,
      redirect: { name: 'lesson', params: {course: 'php-basic', lesson: 0} },
      children: [
        {
          name: 'about-course',
          path: '/poster/course/:course/about',
          component: About,
        },
        {
          name: 'add-lesson',
          path: '/poster/course/:course/lesson',
          component: Lesson,
        },
        {
          name: 'lesson',
          path: '/poster/course/:course/lesson/:lesson',
          component: Lesson,
        }
      ]
    },
    {path: '*', component: NotFound}
  ]
};
