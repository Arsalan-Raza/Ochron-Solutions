import {
	RouterProvider,
	createHashHistory,
	createRouter,
	createRoute,
	createRootRoute,
} from '@tanstack/react-router';

// Layout
import OnboardingAi from '../components/layout/onboarding-ai';

// Pages
import steps from './routes';
import NotFound404 from '../pages/not-found-404';
import FullPreview from '../pages/full-preview';

// Root route
const rootRoute = createRootRoute( {
	notFoundComponent: NotFound404,
} );

// Layout for the steps
const stepsLayout = createRoute( {
	getParentRoute: () => rootRoute,
	id: 'stepsLayout',
	component: OnboardingAi,
} );

// Full page preview route.
const fullPreviewRoute = createRoute( {
	getParentRoute: () => rootRoute,
	path: '/design-preview',
	component: FullPreview,
} );

// Steps routes
const stepsRoutes = steps.map( ( step ) =>
	createRoute( {
		getParentRoute: () => stepsLayout,
		path: step.path,
		component: step.component,
	} )
);

// Route tree and router instance
const routeTree = rootRoute.addChildren( [
		fullPreviewRoute,
		stepsLayout.addChildren( stepsRoutes ),
	] ),
	router = createRouter( { routeTree, history: createHashHistory() } );

// Router provider
const Router = () => <RouterProvider router={ router } />;

export default Router;
