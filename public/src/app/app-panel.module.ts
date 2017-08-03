import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule } from '@angular/router';
import { AppPanelComponent } from './app-panel.component';
import { PanelComponent } from './panel/panel.component';
import { PanelProfileComponent } from './panel-profile/panel-profile.component';
import { PanelPortfolioComponent } from './panel-portfolio/panel-portfolio.component';
import { PanelBlogComponent } from './panel-blog/panel-blog.component';
import { PanelSettingComponent } from './panel-setting/panel-setting.component';

var router = [
  {
    path: '', component: PanelComponent, children: [
      { path: 'profile', component: PanelProfileComponent },
      { path: 'portfolio', component: PanelPortfolioComponent },
      { path: 'blog', component: PanelBlogComponent },
      { path: '', redirectTo: '/profile', pathMatch: 'full' }

    ]
  },
  { path: '**', redirectTo: '/', pathMatch: 'full' },
];

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot(router)
  ],
  declarations: [
    AppPanelComponent,
    PanelComponent,
    PanelProfileComponent,
    PanelPortfolioComponent,
    PanelBlogComponent,
    PanelSettingComponent
  ],
  bootstrap: [AppPanelComponent]

})
export class AppPanelModule { }
