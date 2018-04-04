import Home from './components/contents/Home';
import About from './components/contents/About';
import QA from './components/contents/QA';
import Index from './components/contents/courses/Index';
import Lesson from './components/contents/courses/Lesson';
import NotFound from './components/NotFound';

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
            redirect: { name: 'content', params: {course: 'php-advance', lesson: 0} },
            children: [
                {
                    name: 'content',
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
        {
            name: 'qa',
            path: '/qa',
            component: QA,
        },
        {path: '*', component: NotFound}
    ]
};
