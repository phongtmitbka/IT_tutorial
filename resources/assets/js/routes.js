import Home from './components/contents/Home';
import About from './components/contents/About';
import QA from './components/contents/QA';
import Course from './components/contents/Course';
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
            component: Course,
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
        { path: '*', component: NotFound }
    ]
};
