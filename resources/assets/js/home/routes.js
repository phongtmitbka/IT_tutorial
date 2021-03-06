import Home from './components/contents/Home';
import About from './components/contents/About';
import AboutCourse from '../common/components/lesson/About';
import Index from './components/contents/courses/Index';
import Lesson from './components/contents/courses/Lesson';
import NotFound from '../common/components/NotFound';

export default {
    mode: 'history',
    routes: [
        {
            name: 'home',
            path: '/',
            component: Home,
        },
        {
            name: 'course',
            path: '/course',
            component: Index,
            redirect: { name: 'lesson', params: {course: 'php-basic', lesson: 0} },
            children: [
                {
                    name: 'about-course',
                    path: '/course/:course/about',
                    component: AboutCourse,
                },
                {
                    name: 'lesson',
                    path: '/course/:course/lesson/:lesson',
                    component: Lesson,
                }
            ]
        },
        {
            name: 'about',
            path: '/about',
            component: About,
        },
        {path: '*', component: NotFound}
    ]
};
