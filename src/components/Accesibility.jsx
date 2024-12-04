import React from "react";

export default function AppLayout() {
	return (
		<>
			<Header />
			<AccessibilityWidget theme="dark" />
			<Content />
			<Footer />
		</>
	);
}